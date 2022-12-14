
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AXISnet</title>
    <link href="assets/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome.css" rel="stylesheet">
    <link href="assets/animate.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    <link href="assets/checkbox.css" rel="stylesheet">
    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
    <style type="text/css">.blink_me {
        animation: blinker 2s linear infinite;
    }
    @keyframes blinker {
      50% { opacity: 0; }
    }
    </style>
</head>
    <body class="black-bg">
        <div class="wrapper wrapper-content animated fadeIn">
            <div class="col-md-12">
                <div class="form">
                    <div class="passwordBox">
                        <div class="ibox-content">
                            <div>
                                <div class="blink_me">
                                    <center>
                                        <h1>INJECT PAKET AXIS</h1>
                                    </center>
                                </div>
                            </div>
                            <div align="center">
                                <img src="assets/img/logo.svg" alt="AXIS">
                            </div>
                            <div>
                                <center>
                                    <p><h4>Login di <a href="https://my.axisnet.id/" target="_blank"><u>SINI</u></a> Lalu buka lagi web ini</h4></p>
                                    <p><h4>Pilih salah satu opsi di bawah ini.</h4></p>
                                </center>
                            </div>
                                <hr>
                                    <div>
                                        <center>
                                            Cara <b><u>Otomatis</u></b>
                                        </center>
                                    </div>
                                <form role="form" class="m-t" action="https://my.axisnet.id/home/beli_paket" method="POST">
                                    <div class="form-group">
                                        <select class="form-control" name="pkgid">
                                            <option disabled> <i class="fa fa-rocket"></i> AXISnetInject &copy; 2018 <i>Ahmad Thoriq Najahi</i></option>
                                            <option value="3212251"> AXIS PLAY 2GB Rp1 3hr</option>
                                            <option value="3212252"> AXIS PLAY 3GB Rp1 3hr</option>
                                            <option value="3212253"> AXIS PLAY 6GB Rp1 3hr</option>
                                            <option value="3212254"> AXIS PLAY 9GB Rp1 5hr</option>
                                            <option value="3212255"> AXIS PLAY 12GB Rp1 5hr</option>
                                            <option value="3110086"> BONUS AXIS 1GB 7hr</option>
                                            <option value="3110041" selected> Bonus AXIS 500MB 14 Hari</option>
                                            <option value="3212226"> BONUS AXIS 500MB 14hr Versi2</option>
                                            <option value="3110085"> BONUS AXIS 500MB 7hr</option>
                                            <option value="359578"> Paket Lainnya 1GB 30hr</option>
                                            <option value="3212226"> Paket Locked Offer 500MB, 7hr</option>
                                            <option value="3212183"> Bonus Yonder Music + Masa Aktif 60 Hari</option>
                                            <option value="3212032"> GAUL Unlimited 1 hr</option>
                                            <option value="1110149"> Nelpon AXIS Unlimited 30hr</option>
                                        </select>
                                        <input type="hidden" class="form-control" name="ammount" value="1">
                                       </div>
                                       <div>
                                           <button type="submit" class="btn btn-md btn-info btn-block" data-somestringvalue-text="loading"autocomplete="off">Tembak!</button>
                                       </div>
                                   </form>
                                   <hr>
                                    <div>
                                        <center>
                                            Cara <b><u>Manual</u></b> :
                                        </center>
                                    </div>
                                <form role="form" class="m-t" action="https://my.axisnet.id/home/beli_paket" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="pkgid" placeholder="321xxxx/311xxxxx" maxlength="7">
                                        <input type="hidden" class="form-control" name="ammount" value="1">
                                    </div>
                                    <div>
                                        <button type="submit" name="ammount" class="btn btn-md btn-info btn-block" data-somestringvalue-text="loading"autocomplete="off">Tembak!</button>
                                    </div>
                                </form>
                                <hr>
                                <div>
                                    <center>
                                         <i class="fa fa-rocket"></i> AXISnetInject &copy; 2018 <i>Ahmad Thoriq Najahi</i>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Mainly scripts -->
    <script language="JavaScript">
      window.onload = function() {
        document.addEventListener("contextmenu", function(e){
          e.preventDefault();
        }, false);
        document.addEventListener("keydown", function(e) {
        //document.onkeydown = function(e) {
          // "I" key
          if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
            disabledEvent(e);
          }
          // "J" key
          if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
            disabledEvent(e);
          }
          // "S" key + macOS
          if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
            disabledEvent(e);
          }
          // "U" key
          if (e.ctrlKey && e.keyCode == 85) {
            disabledEvent(e);
          }
          // "F12" key
          if (event.keyCode == 123) {
            disabledEvent(e);
          }
        }, false);
        function disabledEvent(e){
          if (e.stopPropagation){
            e.stopPropagation();
          } else if (window.event){
            window.event.cancelBubble = true;
          }
          e.preventDefault();
          return false;
        }
      };
    </script>
    <script src="assets/jquery-2.1.1.js"></script>
    <script src="assets/inspinia.js"></script>
    <script src="assets/bootstrap.js"></script>
    <script src="assets/jquery.metisMenu.js"></script>
    <script src="assets/jquery.slimscroll.min.js"></script>
    <script src="assets/pace.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".btn").click(function(){
                $(this).button('loading').delay(4000).queue(function(){
                    $(this).button('somestringvalue');
                    $(this).dequeue();
                });        
            });  
        });  
    </script>
</body>
</html>
Footer
