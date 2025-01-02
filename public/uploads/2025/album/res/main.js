	import PhotoSwipeLightbox from './photoswipe/photoswipe-lightbox.esm.min.js';
	import PhotoSwipe from './photoswipe/photoswipe.esm.min.js';
	let hashChangedBySkin = false;
	const UNDEF = 'undefined',
		LB_SELECTOR = '.card.image > .thumb,.card.video > .thumb,.aday > .thumb',
		IS_LOCAL = location.protocol === 'file' || location.host.startsWith('127.0.0.1') || location.host.startsWith('192.168'),
		HISTORY = window.hasOwnProperty('history') && !!window.history.pushState,
		noContextMenu = function(e) { 
			e.preventDefault(); 
		},
		findImageNumber = function(name) {
			const imgs = document.querySelectorAll(LB_SELECTOR);
			for (let i = 0; i < imgs.length; i++) {
				if (imgs[i].getAttribute('data-pswp-src') === ('slides/' + name)) return i;
			}
			return -1;
		},
		setHash = function(hash, title) {
			const h = (typeof hash === UNDEF)? '' : '#img=' + encodeURIComponent(hash);
			if (h !== window.location.hash) {
				hashChangedBySkin = true;
				if (h) {
					history.pushState(h, (typeof title === UNDEF)? '' : title, h);
				} else {
					history.pushState('', document.title || '', 'index.html');
				}
				setTimeout(function() { hashChangedBySkin = false; }, 1000);
			}
		},
		hashChanged = function() {
			if (hashChangedBySkin) return;
			const name = window.location.hash.match(/#img=(.+)$/);
			if (name) {
				const n = findImageNumber(name[1]);
				if (n !== -1) {
					if (typeof lightbox.pswp === UNDEF) {
						lightbox.loadAndOpen(n);
					} else {
						lightbox.pswp.goTo(n);
					}
				}
			} else {
				lightbox.pswp.close();
			}
		},
		removeModals = function() {
			const modals = lightbox.pswp.element.querySelectorAll('.modal');
			if (modals) {
				Array.prototype.forEach.call(modals, function(modal) {
					modal.parentNode.removeChild(modal);
				});
				lightbox.pswp.element.classList.remove('has-modal');
			}
		},
		closeModals = function(except) {
			const modals = lightbox.pswp.element.querySelectorAll('.modal' + ((typeof except !== 'undefined')? (':not(.' + except + ')') : ''));
			if (modals) {
				Array.prototype.forEach.call(modals, modal => { modal.style.display = 'none'; });
			}
		},
		createModal = function(el, className) {
			removeModals();
			const window = document.createElement('div'),
				br = el.getBoundingClientRect();
			window.classList.add(className, 'modal');
			window.style.right = (window.innerWidth || document.documentElement.clientWidth) - br.right + 'px';
			window.style.top = br.bottom + 'px';
			lightbox.pswp.element.appendChild(window);
			lightbox.pswp.element.classList.add('has-modal');
			return window;
		},
		getModal = function(className) {
			return lightbox.pswp.element.querySelector('.modal.' + className);
		},
		closeModal = function(el) {
			if (typeof el === 'string') el = getModal(el);
			el.style.display = 'none';
			lightbox.pswp.element.classList.remove('has-modal');
		},
		openModal = function(el) {
			if (typeof el === 'string') el = getModal(el);
			closeModals();
			el.style.display = 'block';
			lightbox.pswp.element.classList.add('has-modal');
		},
		toggleModal = function(el) {
			if (typeof el === 'string') el = getModal(el);
			if (el.style.display === 'block') {
				closeModal(el);
			} else {
				openModal(el);
			}
		},
		pauseAllMedia = function() {
			if (lightbox['pswp']) {
				let media = lightbox.pswp.element.querySelectorAll('video,audio');
				if (media) {
					Array.prototype.forEach.call(media, function(m) {
						m.pause();
					});
				}
			}
		},
		leftArrowSVGString = '<svg aria-hidden="true" class="pswp__icn" width="60" height="60" viewBox="0 0 60 60"><path fill="#f4f4f4" fill-rule="evenodd" d="m17.23 30 21-21 1.54 1.54L20.3 30l19.47 19.46L38.23 51Z"/></svg>',
		lightbox = new PhotoSwipeLightbox({
			gallery: 				'.main',
			children: 				LB_SELECTOR,
			mouseMovePan: 			true,
			initialZoomLevel: 		'fit',
			secondaryZoomLevel: 	1,
			maxZoomLevel: 			4,
			bgOpacity: 				0.980,
			counter: 				false,
			arrowPrevSVG:			leftArrowSVGString,
			arrowNextSVG:			leftArrowSVGString,
			closeSVG:				'<svg aria-hidden="true" class="pswp__icn" width="32" height="32" viewBox="0 0 32 32"><path fill="#f4f4f4" d="M26.11 4.83 16 14.94 5.89 4.83 4.83 5.89 14.94 16 4.83 26.11l1.06 1.07L16 17.06l10.11 10.12 1.07-1.07L17.06 16 27.18 5.89l-1.07-1.06z"/></svg>',
			zoomSVG:				'<svg aria-hidden="true" class="pswp__icn" width="32" height="32" viewBox="0 0 32 32"><path fill="#f4f4f4" d="m27.75 26.69-5.35-5.35a9.76 9.76 0 1 0-1.06 1.06l5.35 5.35ZM15 23.25A8.25 8.25 0 1 1 23.25 15 8.25 8.25 0 0 1 15 23.25Z"/><path fill="#f4f4f4" d="M9.75 14.25h10.5v1.5H9.75z" class="pswp__zoom-icn-bar-h"/><path fill="#f4f4f4" d="M14.25 9.75h1.5v10.5h-1.5z" class="pswp__zoom-icn-bar-v"/></svg>',
			closeTitle: 			'Sluiten',
			zoomTitle: 				'Zoom',
			arrowPrevTitle: 		'Vorige',
			arrowNextTitle: 		'Volgende',
			pswpModule: 			PhotoSwipe
		});
	window.addEventListener('popstate', hashChanged);
	lightbox.on('bindEvents', () => {
		lightbox.pswp.container.addEventListener('wheel', (e) => {
			e.preventDefault();
			if (e.wheelDelta > 0) {
				lightbox.pswp.prev();
			} else if (lightbox.pswp.currIndex < lightbox.getNumItems() - 1) {
				lightbox.pswp.next();
			}
		});
	});
	let swiped = false,
		swipedTo,
		setSwiped = function(on) {
			clearTimeout(swipedTo);
			swiped = on;
			if (on) {
				swipedTo = setTimeout(function() {
					swiped = false;
				}, 500);
			}
		};
	lightbox.on('pointerUp', (e) => {
		setSwiped(!e.originalEvent.target.classList.contains('pswp__button'));
	});
	lightbox.on('pointerDown', (e) => {
		if (lightbox.pswp.element.classList.contains('has-modal')) {
			e.preventDefault();
			if (!e.originalEvent.target.closest('.modal') && !e.originalEvent.target.getAttribute('rel')) {
				closeModals();
				lightbox.pswp.element.classList.remove('has-modal');
			}
		}
	});
	lightbox.on('contentActivate', ({ content }) => {
		if (!swiped) { 
			content.element.classList.add('fadein');
			setTimeout(function() { content.element.classList.remove('fadein'); }, 550)
		}
	});
	lightbox.on('uiRegister', function() {
		lightbox.pswp.ui.registerElement({
			name: 		'custom-counter',
			order: 		7,
			isButton: 	false,
			appendTo: 	'bar',
			onInit: 	(el, pswp) => {
							pswp.on('change', () => {
								const index = lightbox.pswp.currIndex + 1,
									max = lightbox.getNumItems();
								el.innerHTML = (index < max)? (index + '<span>' + (max - 1) + '</span>') : '';
							});
						}
		});
	});
	lightbox.on('contentActivate', ({ content }) => {
		// Changing hash
		if (HISTORY && content.data.src) {
			setHash(content.data.src.replace(/^slides\//, ''), (content.data.element.getAttribute('data-caption') || content.data.alt || '').replace(/<\/?[^>]+>/g, ' '));
		}
	});
	lightbox.on('close', () => {
		// Removing hash
		if (HISTORY) {
			setHash();
		}
	});
	lightbox.on('uiRegister', function() {
		lightbox.pswp.ui.registerElement({
			name: 		'audio-player',
			order: 		8,
			isButton: 	false,
			appendTo: 	'bar',
			onInit: 	(el, pswp) => {
							pswp.on('change', () => {
								const currSlideElement = lightbox.pswp.currSlide.data.element;
								if (currSlideElement) {
									const clip = currSlideElement.getAttribute('data-audioclip');
									if (clip) {
										el.classList.remove('hidden');
										el.innerHTML = '<audio controls controlslist="play notimeline nofullscreen nodownload noplaybackrate"><source src="' + clip + '" type="audio/mpeg"></audio>';
										return;
									}
								}
								el.innerHTML = '';
							});
						}
		});
	});
	lightbox.on('uiRegister', function() {
		lightbox.pswp.ui.registerElement({
			name: 		'custom-caption',
			order: 		9,
			isButton: 	false,
			appendTo: 	'root',
			onInit: 	(el, pswp) => {
							pswp.on('change', () => {
								const currSlideElement = lightbox.pswp.currSlide.data.element;
								if (currSlideElement) {
									const caption = currSlideElement.getAttribute('data-caption');
									if (caption) {
										el.classList.remove('hidden');
										el.innerHTML = caption;
										return;
									}
								}
								el.classList.add('hidden');
							});
						}
		});
	});
	lightbox.addFilter('itemData', (itemData, index) => {
		if (index === lightbox.getNumItems() - 1) {
			return;
		}
		let d = itemData.element.dataset.pswpVideoSrc;
		if (d) {
			itemData.videoSrc = d;
		}
		d = itemData.element.dataset.pswpVideoPoster;
		if (d) {
			itemData.videoPoster = d;
		}
		return itemData;
	});
	lightbox.on('contentLoad', (e) => {
		const { content, isLazy } = e;
		if (content.data.videoSrc) {
			e.preventDefault();
			content.element = document.createElement('div');		  
			content.element.className = 'pswp__video';
			content.state = 'loading';
			content.videoElement = document.createElement('video');
			content.videoElement.src = content.data.videoSrc;
			content.videoElement.controls = true;
			if (content.data.videoPoster) {
				content.videoElement.poster = content.data.videoPoster;
			}
			content.element.appendChild(content.videoElement);
			content.videoElement.oncanplaythrough = () => {
				content.onLoaded();
			};
			
			content.element.onerror = () => {
				content.onError();
			};
		}
	});
	lightbox.on('contentAppend', (e) => {
		const { content } = e;
		if (content.data.videoSrc && content.element && !content.element.parentNode) {
			e.preventDefault();
			content.slide.container.appendChild(content.element);
		}
	});
	lightbox.on('contentRemove', (e) => {
		const { content } = e;
		if (content.data.videoSrc && content.element && content.element.parentNode) {
			e.preventDefault();
			content.element.remove();
		}
	});
	lightbox.on('change', (e) => {
		pauseAllMedia();
	});
	lightbox.addFilter('numItems', (numItems) => {
		return ++numItems;
	});
	lightbox.addFilter('itemData', (itemData, index) => {
		if (index === lightbox.getNumItems() - 1) {
			const ni = document.body.getAttribute('data-next-index');
			return {
				html: '<div class="last-slide">' +
					(ni? '<h4>Hoe nu verder?</h4>' : '') +
					'<div class="buttons">' +
						'<a class="quit btn">Ga naar index</a>' +
						(ni? '<a href="' + ni + '" class="next-index btn">Volgende map</a>' : '') +
					'</div></div>'
			};
		}
		return itemData;
	});
	lightbox.on('contentActivate', ({ content }) => {
		if (content.type === 'html') {
			const btn = content.element.querySelector('.quit');
			if (btn) {
				btn.onclick = function(e) {
					e.preventDefault();
					lightbox.pswp.close();
				};
			}
			lightbox.pswp.element.classList.add('after-last');
		} else {
			lightbox.pswp.element.classList.remove('after-last');
		}
	});
	lightbox.on('uiRegister', function() {
		lightbox.pswp.ui.registerElement({
			name: 		'download-button',
			ariaLabel: 	'Download in <b>hoge resolutie</b>',
			title:		'Download in <b>hoge resolutie</b>',
			order: 		8,
			isButton: 	true,
			tagName: 	'a',
			html: 		'<svg aria-hidden="true" class="pswp__icn" width="32" height="32" viewBox="0 0 32 32"><path fill="#f4f4f4" d="M25.5 21v4.5h-19V21H5v6h22v-6ZM21.48 12.44l-4.73 4.74V6h-1.5v11.18l-4.73-4.74-1.07 1.06L16 20.05l6.55-6.55-1.07-1.06z"/></svg>',
			onInit: 	(btn, pswp) => {
							btn.setAttribute('download', '');
							btn.setAttribute('rel', 'noopener');
							pswp.on('change', () => {
								const currSlideElement = lightbox.pswp.currSlide.data.element;
								if (currSlideElement) {
									const link = currSlideElement.getAttribute('data-download');
									if (link) {
										btn.href = link;
										btn.classList.remove('hidden');
										return;
									}
								}
								btn.classList.add('hidden');
							});
						}
		});
	});
	if (document.querySelectorAll('.card.video,.card.image,.aday').length) {
		lightbox.init();
		if (window.location.hash) {
			hashChanged();
			window.addEventListener('popstate', function() {
				hashChanged();
			});
		}
	}
	const tb = document.getElementById('nav-toggle');
	if (tb) tb.onclick = (e) => {
		e.stopPropagation(); 
		tb.parentNode.classList.toggle('open'); 
		document.querySelector('aside').classList.toggle('nav-on'); 
		return false; 
	};
	const cm = [ ...document.querySelectorAll('.collapsible .has-submenu') ];
	if (cm) cm.forEach(sm => {
		const cb = document.createElement('b');
		cb.classList.add('collbtn');
		cb.innerHTML = '\u203A'; //&#8250;
		sm.appendChild(cb);
		cb.onclick = (e) => {
			e.stopPropagation();
			const a = e.currentTarget.parentNode;
			if (a.classList.contains('collapsed')) a.classList.remove('collapsed');
			else  a.classList.add('collapsed');
		}
	});
	document.addEventListener('DOMContentLoaded', function() {
		let imgs = document.querySelectorAll('.lazy');    
		if ('IntersectionObserver' in window) {
			let iobs = new IntersectionObserver(function(entries, observer) {
					entries.forEach(function(el) {
						if (el.isIntersecting) {
							setTimeout(load, 100, el);
						}
					});
				}),
				load = function(el) {
					if (el.isIntersecting) {
						const i = el.target;
						i.src = i.dataset.src;
						i.classList.remove('lazy');
						iobs.unobserve(i);
					}
				};
			imgs.forEach(function(i) {
				iobs.observe(i);
			});
		} else {  
			let llto,
				lazyload = function() {
					if (llto) {
						clearTimeout(llto);
					}    
					llto = setTimeout(function() {
						const st = window.pageYOffset;
						imgs.forEach(function(i) {
							if (i.offsetTop < (window.innerHeight + scrollTop)) {
								i.src = i.dataset.src;
								i.classList.remove('lazy');
							}
						});
						if(!imgs.length) { 
							document.removeEventListener('scroll', lazyload);
							window.removeEventListener('resize', lazyload);
						}
					}, 20);
				};
			document.addEventListener('scroll', lazyload);
			window.addEventListener('resize', lazyload);
		}
	});
