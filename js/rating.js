const stars = document.querySelectorAll('.star');

function setRating(rating) {
  stars.forEach((star) => {
    if (star.getAttribute('data-rating') <= rating) {
      star.classList.add('active');
    } else {
      star.classList.remove('active');
    }
  });
}

stars.forEach((star) => {
  star.addEventListener('click', () => {
    setRating(star.getAttribute('data-rating'));
  });
});