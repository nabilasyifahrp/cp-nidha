<!-- resources/views/appointments/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Appointment</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Edit Appointment</h1>

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form action="{{ route('appointments.update', $id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama (required)</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $appointment['name'] }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email (required)</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $appointment['email'] }}" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Nomor Telepon (required)</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $appointment['phone'] }}" required>
            </div>
            <div class="mb-3">
                <label for="company" class="form-label">Perusahaan</label>
                <input type="text" class="form-control" id="company" name="company" value="{{ $appointment['company'] }}">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Tanggal Presentasi</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $appointment['date'] }}" required>
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Jam</label>
                <select class="form-select" id="time" name="time" required>
                    <option>{{ $appointment['time'] }}</option>
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
            <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <textarea class="form-control" id="message" name="message" rows="3" required>{{ $appointment['message'] }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Perbarui</button>
        </form>
    </div>

    <!-- Script Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
