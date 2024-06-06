@extends('layout')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/kurikulum.css')}}">
      <!-- Current Page -->
      <section id="hero" class="px-0">
        <div class="container">
            <div class="hero-title">
                <div class="hero-text">Kurikulum</div>
            </div>
        </div>
    </section>

    <!-- Kurikulum -->
    <section>
      <div class="container py-5">
          <div class="row">
              <div class="col-lg-12">
                  <div class="table-responsive mx auto">
                      <table class="table table-bordered">
                          <thead>
                              <tr>
                                  <th class="No" scope="col">No</th>
                                  <th class="Mata-pelajaran" scope="col">Mata pelajaran</th>
                                  <th class="Waktu" scope="col">Waktu</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1.</td>
                                  <td>Matematika</td>
                                  <td>07.00-08.00</td>
                              </tr>
                              <tr>
                                  <td>2.</td>
                                  <td>Bahasa Indonesia</td>
                                  <td>08.00-09.00</td>
                              </tr>
                              <tr>
                                  <td>3.</td>
                                  <td>IPA</td>
                                  <td>09.00-10.00</td>
                              </tr>
                              <tr>
                                  <td>4.</td>
                                  <td>IPS</td>
                                  <td>10.00-11.00</td>
                              </tr>
                              <tr>
                                  <td>5.</td>
                                  <td>Pendidikan Agama</td>
                                  <td>11.00-12.00</td>
                              </tr>
                              <tr>
                                  <td>6.</td>
                                  <td>Seni budaya</td>
                                  <td>12.00-13.00</td>
                              </tr>
                              <tr>
                                  <td>7.</td>
                                  <td>Tahfidz</td>
                                  <td>13.00-14.00</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
    </section>
@endsection
