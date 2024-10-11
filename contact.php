<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <!-- Tampilkan pesan sukses jika ada parameter 'success' di URL -->
            <?php if (isset($_GET['success']) && $_GET['success'] == 'true'): ?>
                <div id="successMessage" class="alert alert-success">
                    Message successfully sent!
                </div>
            <?php endif; ?>

            <h1>Contact Me</h1>
            <p>If you have any questions, feel free to reach out by filling out the form below.</p>

            <!-- Formulir kontak -->
            <form action="process_contact.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</div>

<script>
// Script untuk menyembunyikan pesan sukses setelah 2 detik
setTimeout(function() {
    var successMessage = document.getElementById('successMessage');
    if (successMessage) {
        successMessage.style.display = 'none';
    }
}, 2000);
</script>

<?php include 'includes/footer.php'; ?>
