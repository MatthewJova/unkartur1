<?php
public function logout() {
    // Hapus data session
    $this->session->unset_userdata('user_id');
    $this->session->unset_userdata('username');

    // Redirect ke halaman login
    redirect('auth/login');
}