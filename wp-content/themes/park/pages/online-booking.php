<div class="page-online-booking">

  <h1>Online-бронирование</h1>

  <script>
    var myEventMethod = window.addEventListener ? "addEventListener"
    : "attachEvent";

    var myEventListener = window[myEventMethod];

    var myEventMessage = myEventMethod == "attachEvent" ? "onmessage"
    : "message";

    myEventListener(myEventMessage, function(e) {
      if (e.data === parseInt(e.data)) {
        document.getElementById('my-iframe-id').height = e.data + "px";
        console.log(e.data);
      }
    }, false);
  </script>

  <iframe
    id="my-iframe-id"
    style="border: 0;"
    src="http://parkhadzhoh-book.otelms.com/bookit/step1?inline=true"
    width="100%" scrolling="yes"
  ></iframe>

</div>
