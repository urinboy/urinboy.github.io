</div>
  
  
  <script>
   swal("Hello world!");
    swal({
        title: "Telegram kanalimizga obuna boʻlganmisiz?",
      text: "TUORMedi.uz platformamizning rasmiy telegram kanaliga obuna boʻling: https://t.me/tuormedia_uz (@tuormedia_uz). Va barcha yangiliklardan birinchilardan boʻlib xabardor boʻling",
      buttons: {
        cancel: "Kerakmas",
        catch: {
          text: "Kanalga obuna boʻlish",
          value: "catch",
        },
      },
    })
    .then((value) => {
      switch (value) {
        case "catch":
          window.location.href = "https://t.me/tuormedia_uz";
          break;
     
        default:
          swal("Yana bir oʻylab koʻring!");
      }
    });
</script>
  <!-- Project -->
 <!-- <div class="footer">
    <div class="copy">&copy; Tursunboyev O'rinboy</div>
  </div>-->
  <script src="main.js"></script>
</body>
</html>