    function toggleMoreOptions(show) {
      const moreOptions = document.getElementById('moreOptions');
      const showMoreBtn = document.getElementById('showMoreBtn');
      moreOptions.classList.toggle('hidden', !show);
      showMoreBtn.classList.toggle('hidden', show);
    }