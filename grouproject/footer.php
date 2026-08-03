<?php
    echo '
    <footer>
        <a href="/home.php">
            <img src="img/mom_logo.png" alt="Mitigation of Misinformation project icon."/>
        </a>

        <p id="footerText"></p>

        <script>
            const currentYear = new Date().getFullYear();

            document.getElementById("footerText").innerHTML =
                "&copy; " + currentYear +
                " Mitigation of Misinformation - EPIC Labs - Santa Clara University School of Engineering";
        </script>
    </footer>
    ';
?>