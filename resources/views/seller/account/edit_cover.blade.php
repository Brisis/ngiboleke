@extends('seller.layouts.base')

  @section('content')

      @include('seller.partials.aside')
      <main class="main-wrap">
          @include('seller.partials.header')
          <section class="content-main">
            <form action="{{ route('seller.edit_cover')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                  <div class="content-header">
                      <a href="{{ route('seller.edit') }}"><i class="material-icons md-arrow_back"></i> Go back </a>
                  </div>
                  <div class="col-9">
                      <div class="content-header">
                          <h2 class="content-title">Edit Merchant</h2>
                          <div>
                              <button type="submit" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save Changes</button>
                          </div>
                      </div>
                  </div>
                  @if(session()->has('message'))
                  <div class="col-9">
                    <div class="card alert alert-success bg-success">
                      <div class="card-body">
                        <p class="text-white">{{ session()->get('message') }}</p>
                      </div>
                    </div>
                  </div>
                  @endif
                  <div class="col-lg-9">
                      <div class="card mb-4">
                          <div class="card-header">
                            <h5 class="card-title">Merchant Cover Image</h5>
                          </div>
                          <div class="card-body">
                              <div class="mb-4">
                                <div class="title mb-2"><i class="lni lni-gallery"></i><span>Chosen Picture</span></div>
                                <img width="180px" src="{{ asset('static/img/ph.jpg') }}" alt="picture preview" id="picture">
                              </div>
                              <div class="mb-4">
                                  <label for="name" class="form-label">Cover Image</label>
                                  <input id="pictureInput" class="form-control" type="file" accept="image/*" name="merchant_cover">
                              </div>
                          </div>
                      </div> <!-- card end// -->
                  </div>
              </div>
            </form>
          </section> <!-- content-main end// -->
          @include('seller.partials.footer')
      </main>

      <script>
        pictureInput.onchange = evt => {
          const [file] = pictureInput.files
          if (file) {
            picture.src = URL.createObjectURL(file)
          }
        }
      </script>

  @endsection
