<div id="sidebar" class="col-12 col-lg-2 order-first text-center px-0 mb-3 mb-lg-0">
    <svg
        id="toggleMobileMenu"
        class="text-white p-2 mt-2 mx-4 d-block d-lg-none text-start"
        style="width: 48px; cursor: pointer"
        fill="none"
        stroke="currentColor"
        viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg"
    >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16"
        ></path>
    </svg>
    <div id="mobileMenu" class="d-none d-lg-none flex-column">
        <a class="mobile-menu-link" href="./">Home</a>
        <a class="mobile-menu-link" href="./links">Links</a>
        <a class="mobile-menu-link" href="./additionalinfo">Additional Info</a>
    </div>
    <!-- Sidebar -->
    <div class="border sidebar-border p-2 mt-2 mx-4 bg-white">
        <!-- Info -->
        <img
            src="./assets/img/stalogo.png"
            class="rounded img-fluid"
            alt="St. Augustine CHS Logo"
        />
        <h6 class="coloured-text font-bold text-center lh-sm mt-1" id="date">
            Today's Date
        </h6>
        <h3 class="coloured-text font-bold text-center lh-sm mb-4">
            <strong>Day 1</strong>
        </h3>
        <div class="d-none d-lg-block">
            <p class="coloured-text text-center lh-sm">
                Address: <br />2188 Rodick Rd Markham, ON <br />L6C 1S3
            </p>
            <p class="coloured-text text-center lh-sm">Phone: <br />905-887-6171</p>
            <p class="coloured-text text-center lh-sm">
                Attendance: <br />905-887-7950
            </p>
            <p class="coloured-text text-center lh-sm">Guidance: <br />905-887-6185</p>
        </div>
    </div>
    <div id="navbar" class="d-none d-lg-block">
        <a
            href="https://staugustinechs.ca/"
            class="btn mt-4 p-4 sidebar-button-main text-white bg-red"
            type="button"
            >STAU Website</a
        >
        <?php 
            $base = basename($_SERVER['PHP_SELF']);
        ?>
        <a
            href="./"
            class="btn mt-5 p-4 sidebar-button-nav <?php 
                if ($base == "index.php") {
                    echo "text-white bg-red";
                } else {
                    echo "bg-white";
                }
            ?>"
            type="button"
            >Home</a
        >
        <a
            href="./links"
            class="btn mt-1 p-4 sidebar-button-nav <?php 
                if ($base == "links.php") {
                    echo "text-white bg-red";
                } else {
                    echo "bg-white";
                }
            ?>"
            type="button"
            >Links</a
        >
        <a
            href="./additionalinfo"
            class="btn mt-1 p-4 sidebar-button-nav <?php 
                if ($base == "additionalinfo.php") {
                    echo "text-white bg-red";
                } else {
                    echo "bg-white";
                }
            ?>"
            type="button"
            >Additional Info</a
        >
    </div>
</div>