$('#hapus').on('click', function(e) {
    e.preventDefault();
    $('#user').val('');
    $('#pass').val('');
})
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
    
