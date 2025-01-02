	// Justify rows function
	let thumbDims = [ 400, 200 ],
		thumbGap = 8,
		thumbPad = 3,
		borderWidth = 1,
		itemsPadding = 36,
		xWidth = 2 * (thumbGap + thumbPad + borderWidth),
		justifyTimeout = null,
		
		isVisible = function(el) {
			return !!(el.offsetWidth || el.offsetHeight || el.getClientRects().length);
		},
		
		getVisiblePage = function() {
			return Array.from(document.querySelectorAll('.items')).find(el => {
					return isVisible(el);
				});
		},
		
		getColumnWidth = function() {
			let el = document.body.querySelector('article.main'),
				cw = document.body.clientWidth,
				ch = document.body.clientHeight;
			if (cw >= 960 && ch >= 640) {
				return el.clientWidth - itemsPadding * 2 - ((el.scrollHeight > el.clientHeight)? 0 : 15);
			} else if (cw >= 640 && ch >= 480) {
				return el.clientWidth - Math.ceil(itemsPadding * 1.5);
			}
			return el.clientWidth - itemsPadding;
		},
		
		justifyRow = function(cards, f) {
			f = Math.min(f * .999, 1.4);
			
			let h = (cards.length > 1)? (Math.floor(thumbDims[1] * f) + 'px') : 'auto';
			
			cards.forEach(function(card) {
				card.style.width = parseInt(card.getAttribute('data-width')) * f + 2 * (thumbPad + borderWidth) + 'px';
				let el = card.querySelector('a');
				if (el) {
					el.style.height = h;
				}
				el = card.querySelector('.caption');
				if (el) {
					el.style.maxWidth = '100%';
				}
			});
		},
		
		clearDims = function(cards) {
			cards.forEach(function(card) {
				card.style.width = 'auto';
				let el = card.querySelector('a');
				if (el) {
					el.style.height = thumbDims[1] + 'px';
				}
			});
		},
	
		justifyRows = function(thumbs, cw) {
			if ((typeof thumbs === 'undefined') || !thumbs) {
				return;
			}
			let	cards = Array.from(thumbs.children),
				i = 0, 
				rw = 0,
				w;
			if (cards.length) {
				while (cards.length && i < cards.length) {
					w = parseInt(cards[i].getAttribute('data-width')) + xWidth;
					
					if ((rw + w) >= cw) {
						if (i && (rw + (w / 2) >= cw)) {
							justifyRow(cards.slice(0, i), (cw - i * xWidth) / (rw - i * xWidth));
							cards = cards.slice(i);
						} else {
							justifyRow(cards.slice(0, i + 1), (cw - (i + 1) * xWidth) / (rw + w - (i + 1) * xWidth));
							cards = cards.slice(i + 1);
						}
						i = 0;
						rw = 0;
					} else {
						i++;
						rw += w ;
					}
				}
				if (cards.length && (cw / rw < 1.4)) {
					// Last row; justify only if close to fill
					justifyRow(cards, Math.min(1, cw / rw));
				} else {
					clearDims(cards);
				}
			}
		},
		
		justifyPage = function(page, doneFn) {
			let pg = (typeof page === 'undefined')? getVisiblePage() : page,
				cw = getColumnWidth(pg);
			if (pg.getAttribute('data-fixedfor') !== cw) {
				Array.from(pg.querySelectorAll('.thumbnails')).forEach(function(thumbs) {
					justifyRows(thumbs, cw);
				});
				pg.setAttribute('data-fixedfor', cw);
			}
			pg = document.querySelector('.items.hide');
			if (pg) {
				pg.classList.remove('hide');
			}
			if (typeof doneFn === 'function')
				doneFn.call();
		};
	
	window.addEventListener('load', function() {
		if (document.querySelector('.thumbnails')) {
			justifyTimeout = setTimeout(justifyPage, 100);
			window.addEventListener('resize', function(e) {
				clearTimeout(justifyTimeout);
				justifyTimeout = setTimeout(justifyPage, 500);
				return true;
			});
		}
		
		justify = function(page, doneFn) {
			if (document.querySelector('.thumbnails')) {
				justifyTimeout = setTimeout(function() {
					justifyPage(page, doneFn);
				}, 20);
			}
		}
		
	});
	
		
