@foreach($properties as $property)
    @if($property->modal_target)
    <div class="modal fade" id="{{ $property->modal_target }}" tabindex="-1" aria-labelledby="{{ $property->modal_target }}Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->name }}" class="img-fluid position-relative" />
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>{{ $property->name }}</h4>
                    <h6>Call Now: +91-7011420563, +91-8377818657</h6>
                    <p class="text-black fw-bolder"><span class="icon-map-marker me-2"></span>{{ $property->location }}{{ $property->pincode ? ', ' . $property->pincode : '' }}</p>
                    <p class="text-black fw-bolder"><span class="icon-gears me-2"></span>Configuration: {{ $property->bhk_range }}, {{ $property->price_range }}, {{ $property->area_range }}</p>
                    <p class="text-black fw-bolder"><span class="icon-calendar me-2"></span>Launch Date: {{ $property->created_at->format('Y/m') }}</p>
                    <p class="text-black fw-bolder"><span class="icon-home me-2"></span>Possession: --</p>
                    <p class="text-black fw-bolder"><span class="icon-map-marker me-2"></span>Locality: {{ $property->location }}</p>
                    <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#bookNow">Book Now</a>
                </div>
            </div>
        </div>
    </div>
    @endif
@endforeach

<!-- Book Now Modal -->
<div class="modal fade" id="bookNow" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="bookNowLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="bookNowLabel">Book Now</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form method="POST" id="contactForm" name="contactForm" action="#">
              @csrf
              <div class="row">
                <div class="col-6 mb-3">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name" required />
                </div>
                 <div class="col-6 mb-3">
                  <input type="number" class="form-control" name="number" id="number" placeholder="+91 XXXX XXXX XX" required />
                </div>
                <div class="col-6 mb-3">
                  <input type="number" class="form-control" name="whatsappnumber" id="whatsappnumber" placeholder="WhatsApp Number" required />
                </div>
                <div class="col-6 mb-3">
                  <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Job Title" required />
                </div>
                <div class="col-12 mb-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required />
                </div>
                <div class="col-12 mb-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Query" required />
                </div>
                <div class="col-12 mb-3">
                  <textarea name="message" class="form-control" id="message" cols="30" rows="3" placeholder="Message"></textarea>
                </div>
                <div class="col-12">
                  <input type="submit" name="send" value="Send Message" class="btn btn-primary">
                  <div class="submitting"></div>
                </div>
              </div>
          </form>
      </div>
    </div>
  </div>
</div> 