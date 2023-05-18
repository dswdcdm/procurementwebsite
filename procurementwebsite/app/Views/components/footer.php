    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

    <footer>
        <div class="environment">
            <div class="row">
                <div class="col-12 col-md-5">
                    <img class="img-fluid" src="<?php echo base_url('assets/images/footer.png'); ?>" width="80%" height="60%" alt="logo" />
                </div>
                <div class="col">
                    <p class="text-dark font-weight-bold"> #DSWDBawatBuhayMahalaga</p>
                </div>
                <!-- <div class="col">
                    <img class=" img-fluid" src="<?php echo base_url('assets/images/footer.png'); ?>" width="40%" height="60%" alt="logo" />
                </div> -->
                <div class="col">
                    <ul class="d-flex gap-2">
                        <li class="text-dark font-weight-bold"><a class="btn btn-primary" style="background-color: #3b5998;" href="https://www.facebook.com/" role="button" target="_blank">FACEBOOK <i class="fab fa-facebook-f"></i></a></li>
                        <li class="text-dark font-weight-bold"> <a class="btn btn-primary" style="background-color: #ac2bac;" href="#!" role="button" target="_blank">INSTAGRAM <i class="fab fa-instagram"></i></a></li>
                        <li class="text-dark font-weight-bold"> <a class="btn btn-primary" style="background-color: #ed302f;" href="#!" role="button" target="_blank">YOUTUBE <i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="copyrights">
            <p>&copy;COPYRIGHTS 2023 - <?= date('Y') ?> DSWD ADMINISTRATIVE SERVICES - BUILDING AND GROUNDS MANAGEMENT DIVISION</p>
        </div>
    </footer>


    <script>
      
        // Get references to the checkboxes
        const masterCheckbox = document.getElementById('masterCheckbox');
        const checkboxes = document.querySelectorAll('.checkbox');

        // Attach an event listener to the master checkbox
        masterCheckbox.addEventListener('click', function() {
            const isChecked = masterCheckbox.checked;

            // Update the state of the other checkboxes
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = isChecked;
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

        function toggleMenu() {
            var menuItems = document.getElementsByClassName('menu-item');
            for (var i = 0; i < menuItems.length; i++) {
                var menuItem = menuItems[i];
                menuItem.classList.toggle("hidden");
            }
        }

        function capitalizeFirstLetter() {
            var input = document.getElementById("name");
            var capitalized = input.value.toLowerCase().replace(/(?:^|\s)\S/g, function(a) {
                return a.toUpperCase();
            });
            input.value = capitalized;
        }
    </script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    </body>

    </html>