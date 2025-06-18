<section id="contact">
<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center mb-5">
            <h2 class="fw-bold text-success">Contact Us</h2>
            <p class="lead">Kami siap membantu Anda! Hubungi kami untuk konsultasi, pertanyaan, atau
                informasi lebih lanjut melalui WhatsApp atau platform lainnya. Kami selalu siap memberikan solusi
                terbaik untuk Anda.</p>
        </div>

        <div class="col-md-6 mb-4">
            <h3 class="fw-bold">Informasi lebih lanjut</h3>
            <p>Silakan menghubungi kami.</p>
            <div class="d-flex align-items-center">
                <div class="d-flex flex-column align-items-center me-4">
                    <img src="{{ asset('assets/images/sosial_media/zoom.png') }}" alt="Zoom" style="width: 60px;">
                    <p class="mt-2">Zoom</p>
                </div>
                <div class="d-flex flex-column align-items-center me-4">
                    <img src="{{ asset('assets/images/sosial_media/gmeet.png') }}" alt="Google Meet" style="width: 60px;">
                    <p class="mt-2">Google Meet</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h3 class="fw-bold">Make an Appointment</h3>
            <p class="text-muted mb-4">
                Banyak fitur dan keunggulan layanan kami yang belum dapat kami sampaikan via website ini.
                Silakan isi jadwal berikut untuk dapat kami presentasikan secara lebih detail.
            </p>

            <div id="appointment-alert"></div>

            <form id="appointment-form" action="{{ url('/appointment-request') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required placeholder="Your full name">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label fw-bold">Phone Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="phone" name="phone" required
                                placeholder="08123**** or 628123****"
                                pattern="^(08|62)[0-9]{8,}$"
                                title="Gunakan format 08 atau 62 tanpa simbol +">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label fw-bold">Tanggal Presentasi</label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="yyyy-mm-dd">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="your@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="company" class="form-label fw-bold">Company<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="company" name="company" required placeholder="Company Name">
                        </div>
                        <div class="mb-3">
                            <label for="time" class="form-label fw-bold">Jam</label>
                            <select class="form-control" id="time" name="time">
                                <option>09.00 WIB</option>
                                <option>10.00 WIB</option>
                                <option>11.00 WIB</option>
                                <option>12.00 WIB</option>
                                <option>13.00 WIB</option>
                                <option>14.00 WIB</option>
                                <option>15.00 WIB</option>
                                <option>16.00 WIB</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label fw-bold">Message <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message" required
                        style="width: 100%; height: 120px;"></textarea>
                </div>

                <div class="row">
                    <div class="col-12 text-center mt-3">
                        <button type="submit" class="btn btn-success text-white w-100">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>

<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(function() {
    $('#appointment-form').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                if (response.success) {
                    $('#appointment-alert').html(`
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            ${response.message}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    `);
                    $('#appointment-form')[0].reset();
                }
            },
            error: function(xhr) {
                let errorMsg = 'Failed to submit form. Please try again.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMsg += `<br><strong>Error:</strong> ${xhr.responseJSON.message}`;
                }

                $('#appointment-alert').html(`
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        ${errorMsg}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                `);
            }
        });
    });
});
</script>
