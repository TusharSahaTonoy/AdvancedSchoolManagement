
<script type="text/javascript" src="{{asset("js/app.js")}}"></script>
<script>
  window.addEventListener('load', function load() {
    const loader = document.getElementById('loader');
    setTimeout(function () {
      loader.classList.add('fadeOut');
    }, 100);
  });
</script>