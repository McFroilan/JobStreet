<?php
// Include the header
get_header();
?>

<main>

    <!-- Container_1 -->
    <div class="container_1">
        <div class="search-container">
            <div>
                <label>What</label>
                <input type="text" placeholder="Enter Keywords">
            </div>
            <div>
                <label>&nbsp;</label>
                <select>
                    <option>Any Classification</option>
                </select>
            </div>
            <div>
                <label>Where</label>
                <input type="text" placeholder="Enter suburb, city, or region">
            </div>
            <button>SEEK</button>
        </div>
        
    </div>

    <!-- Container_2 -->
    <div class="container_2"> 
        <div class="container-signin">
        <button class="signin-button">Sign in</button>
        <a href="#" class="register-button">Register</a>
        <p class="description">Sign in to manage your Jobstreet Profile, save searches and view your recommended jobs.</p>
        </div>
    </div>

    <!-- Container_3 -->
     <div class="box_3">
        <div class="container_3">
            <div class="left-box">
                <h2>All the juicy salary news in your industry</h2>
                <button class="btn-community btn-light">Go to Community</button>
            </div>
            <div class="right-box">
                <h2>"Hello" to better talent matches</h2>
                <button class="btn-hire btn-dark">Hire for FREE</button>
            </div>
        </div>
     </div>


<div class="container_4"> 
        <div class="quick-search">
            <p>Quick search</p>

            <div>
                <span class="category">Classifications</span>
                <a href="#">Accounting</a>
                <a href="#">Education & Training</a>
                <a href="#">Government & Defence</a>
                <a href="#">Healthcare & Medical</a>
                <a href="#">Sales</a>
                <a href="#">View all</a>
            </div>

            <div>
                <span class="category">Major cities</span>
                <a href="#">Quezon City</a>
                <a href="#">Manila</a>
                <a href="#">Taguig</a>
                <a href="#">Antipolo</a>
                <a href="#">Las Pinas</a>
                <a href="#">Davao</a>
                <a href="#">Pasay</a>
                <a href="#">Cebu City</a>
            </div>

            <div>
                <span class="category">Others</span>
                <a href="#">All Jobs</a>
                <a href="#">Work From Home Jobs</a>
                <a href="#">Virtual Assistant Jobs</a>
                <a href="#">Urgent Hiring Jobs</a>
                <a href="#">Government Jobs</a>
                <a href="#">Work Abroad Jobs</a>
                <a href="#">POEA Jobs</a>
                <a href="#">View all</a>
            </div>
        </div>
    </div>
</main>

<?php
// Include the footer
get_footer();
?>
