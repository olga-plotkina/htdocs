import * as basicLightbox from 'basiclightbox';
import 'basiclightbox/dist/basicLightbox.min.css';

function loaderInit (elements) {
	elements.forEach((element) => {
		const popupElement = document.querySelector(element.dataset.popupSelector);
		const closeSelector = popupElement.querySelector('.js-popup-close');
		const instance = basicLightbox.create(popupElement);

		element.addEventListener('click', () => instance.show());
		closeSelector.addEventListener('click', () => instance.close());

		// instance.show();
	});
}

export { loaderInit };
