import PhotoSwipeLightbox from 'photoswipe/lightbox';
import Photoswipe from 'photoswipe';
import 'photoswipe/photoswipe.css';

function loaderInit (elements) {
	elements.forEach((element) => {
		const lightbox = new PhotoSwipeLightbox({
			gallery: element,
			children: 'a',
			pswpModule: Photoswipe,
			closeTitle: 'Close',
			zoomTitle: 'Zoom',
			arrowPrevTitle: 'Previous',
			arrowNextTitle: 'Next',
			errorMsg: 'The photo cannot be loaded'
		});

		lightbox.init();
	});
}

export { loaderInit };
