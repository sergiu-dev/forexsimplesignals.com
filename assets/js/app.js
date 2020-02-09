import $ from 'jquery';
import 'popper.js/dist/popper'
import 'bootstrap/dist/js/bootstrap';
import '../css/app.scss';

window.addEventListener('load', () => {

	/* ** Back to top button ** */

	// Set a variable for our button element.
	const scrollToTopButton = document.getElementById('btnTop');

	// Function that shows the scroll-to-top button if user scrolls beyond a certain value of the window height
	const scrollFunc = () => {
		// Get the current scroll value
		let y = window.scrollY;

		// If the scroll value is greater than the window height, will add the show class to the scroll-to-top button
		if (y > 300) {
			scrollToTopButton.className = 'btn btn-top show';
		} else {
			scrollToTopButton.className = 'btn btn-top hide';
		}
	};

	window.addEventListener('scroll', scrollFunc);

	const scrollToTop = () => {
		// Variable for the number of pixels we are from the top of the document
		const top = document.documentElement.scrollTop || document.body.scrollTop;

		// If that number is greater than 0, scroll back to 0, or the top of the document
		// Animate that scroll with requestAnimationFrame:
		// https://developer.mozilla.org/en-US/docs/Web/API/window/requestAnimationFrame
		if (top > 0) {
			window.requestAnimationFrame(scrollToTop);
			// ScrollTo takes an x and a y coordinate.
			// Increase the '10' value to get a smoother/slower scroll!
			window.scrollTo(0, top - top / 10);
		}
	};

	// When the button is clicked, run ScrolltoTop function
	scrollToTopButton.onclick = (e) => {
		e.preventDefault();
		scrollToTop();
	};
});

// For this we don't have to wait for the entire document to load (including things like images), so adding the 'DOMContentLoaded' type)
window.addEventListener('DOMContentLoaded', () => {

	/* Adding active class to current link */

	// Get all the nav-links,
	// location.pathname -> split it to have just the controller
	// location.origin so we ca split the href
	const navElements = document.querySelectorAll('#mainNav a');
	const currentLink = window.location.pathname.split('/')[1];
	const splitLink = window.location.origin;

	// Go through all the links and compare the current link with the splitted href,
	// if it includes(because we have singular and plural(ex: "article/" and "articles/"), add the 'active' class
	for (let i = 0; i < navElements.length; i++) {
		if (navElements[i].href.split(`${splitLink}/`)[1] === currentLink) {
			navElements[i].classList.add('active');
		}
	}
});