<?php

echo '
<footer class="footer">
    <div class="container">
        <div class="navbar navbar-default navbar-fixed-bottom">
            <p class="copyright text-muted small">Copyright &copy; Grupo Acadêmico 2017. All Rights Reserved</p>
        </div>
    </div>
</footer>

<button onclick="topFunction()" id="botaoTopo" title="Voltar ao topo" type="button" 
class="btn btn-secondary">
    Voltar ao topo <i class="fa fa-angle-double-up"></i>
</button>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("botaoTopo").style.display = "block";
    } else {
        document.getElementById("botaoTopo").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
';
?>