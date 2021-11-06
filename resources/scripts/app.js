/**
 * External Dependencies
 */
import 'jquery';

$(() => {
  const widgets = document.querySelectorAll('aside.sidebar section.widget');
  widgets.forEach((el) => {
    if (
      !el.classList.contains('widget_search') &&
      !el.querySelector('div.wp-block-loginout')
    ) {
      // add stateless-sage-top-level to first child
      el.firstElementChild.classList.add('stateless-sage-sidebar-top-level')
      const insetDiv = document.createElement('div');
      insetDiv.classList.add('stateless-sage-sidebar-emptydiv');
      el.prepend(insetDiv);
    }
  });
});
