<?php
    echo '
    <footer>
        <a href="/home.php">
            <img src="img/mom_logo.png" alt="Mitigation of Misinformation project logo."/>
        </a>

        <a href="https://www.scu.edu/engineering/faculty/shaghaghi-navid/epic-lab/" target="_blank" rel="noopener">

            <img class="epicLogo" src="img/epiclabs_logo.png" "style="width: 50px; height: 50px;" alt="EPIC Labs Logo."/>
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