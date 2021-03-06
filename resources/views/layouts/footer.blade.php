<div class="container">
  <footer class="py-5 footer-dark">
    <div class="row">
      <div class="col-2">
        <h5>Main</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="{{ route('terms') }}" class="nav-link p-0 text-muted">Terms & Conditions</a></li>
          <li class="nav-item mb-2"><a href="{{ route('privacy') }}" class="nav-link p-0 text-muted">Privacy Policy</a></li>
          <li class="nav-item mb-2"><a href="{{ route('disclaimer') }}" class="nav-link p-0 text-muted">Disclaimer</a></li>
          <li class="nav-item mb-2"><a href="{{ route('returns') }}" class="nav-link p-0 text-muted">Return Policy</a></li>
          <li class="nav-item mb-2"><a href="{{ route('disclaimer') }}" class="nav-link p-0 text-muted">Shipping Policy</a></li>
        </ul>
      </div>

      <div class="col-2">
        <h5>News</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">What's Happening</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Version</a></li>
        </ul>
      </div>

      <div class="col-2">
        <h5>Store</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Gaming</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tech</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Audio</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Vape</a></li>
        </ul>
      </div>

      <div class="col-4 offset-1">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of whats new and exciting from us.</p>
          <div class="d-flex w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-outline-warning" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex justify-content-between py-4 my-4">
      <p>&copy; {{date('Y')}} Predator Gaming Tech & Audio. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
      </ul>
    </div>
  </footer>
</div>