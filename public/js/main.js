$('#hapus').on('click', function(e) {
    e.preventDefault();
    $('#user').val('');
    $('#pass').val('');
})
$('#login-btn').on('click', function(e) {
    if($('#user').val()=='')
    {
        $('#user-err').attr('class','form-err-msg');
        $('#user-err').html('Username Tidak Boleh Kosong');
        return false;

    }
    if($('#pass').val()=='')
    {
        $('#pass-err').attr('class','form-err-msg');
        $('#pass-err').html('Password Tidak Boleh Kosong');
        return false;

    }
});
$('#check-pass').change(function() {
    if(this.checked)
    {
        $('#pass').attr('type','text');
    }
    else
    {
        $('#pass').attr('type','password');
    }
})
    
