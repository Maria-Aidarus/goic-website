/**
 * Custom JS for theme elements
 */

/**
 * Wocommerce active class for category list
 */
let fotografieBlocksUrl = window.location.href;
const fotografieBlocksCatLink = document.querySelectorAll(
  ".wc-block-product-categories-list li a"
);
fotografieBlocksCatLink.forEach((item) => {
  if (item.href === fotografieBlocksUrl) {
    item.classList.add("active");
  }
});
