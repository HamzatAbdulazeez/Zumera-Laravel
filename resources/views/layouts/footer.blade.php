<!-- Newsletter -->
<section class="Newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h4>Subcribe to our newsletter</h4>
          <p>
            Get all the updates and news on the best property options
            on-the-go
          </p>
        </div>
        <div class="col-lg-6">
          <form>
            <input
              type="email"
              class="sub-input"
              placeholder="Your email address"
              required
            />
            <div class="dif d-none d-sm-block" type="submit" required>
              Subscribe <i class="bi bi-arrow-right"></i>
            </div>
            <button class="new-submit d-block d-sm-none">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Newsletter Ends -->
  <!-- Footer -->
  <section class="Footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6 d-none d-sm-block">
          <h4>Find The Perfect Property With Zumera</h4>
        </div>
        <div class="col-lg-3 col-sm-6">
          <img
            src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683378060/Zumera/aa_ydymre.png"
            draggable="false"
            alt=""
          />
          <p class="help">HELP & SUPPORT</p>
          <p>
            <a href="{{route('terms')}}">Terms & Conditions</a>
          </p>
          <p>
            <a href="{{route('privacy')}}">Privacy Policy</a>
          </p>

          <p>
            <a href="{{route('contact')}}">Contact Us</a>
          </p>
        </div>
        <div class="col-lg-3 col-sm-6">
          <img
            src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683378060/Zumera/bb_sfbtj2.png"
            draggable="false"
            alt=""
          />
          <p class="help">MEDIA CENTER</p>
          <p>
            <a href="#">News</a>
          </p>
          <p>
            <a href="{{route('blog')}}">Blogs</a>
          </p>
        </div>
        <div class="col-lg-3 col-sm-6">
          <img
            src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683378060/Zumera/cc_cnul9s.png"
            draggable="false"
            alt=""
          />
          <p class="help">OFFICE ADDRESS</p>
          <p>
            <a href="#"
              >Kilometer, 10 Benin Sapele Rd, Local 300102, Benin City</a
            >
          </p>
          <p>
            <a href="#">Tel: + 234 999 9999 000</a>
            <div class="other_num">
                <span>+ 234 999 9999 000</span>
                <span>+ 234 999 9999 000</span>
            </div>
          </p>
          <p>
            <a href="#">Support@zumeragroup.com</a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="Ending">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <img
            src="https://res.cloudinary.com/morshudlhgmo/image/upload/v1683378061/Zumera/Vector_cc8dl1.png"
            draggable="false"
            alt=""
          />
        </div>
        <div class="col-lg-6">
          <p class="text-center">Copyright &copy; 2023 Zumera Properties</p>
        </div>
        <div class="col-lg-3">
          <div class="footer-social">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer Ends-->
  <script>
    var load = document.getElementById('loading')
    var loadM = document.getElementById('loadingMobile')
    function loadfunc(){
        load.style.display = 'none';
        loadM.style.display = 'none'
    }
  </script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/main.js"></script>
</body>
</html>
