
document.getElementById('upload-container').addEventListener('click', function() {
    var input = document.createElement('input');
    input.type = 'file';
    input.accept = 'image/*';
    input.style.display = 'none';
    
    input.addEventListener('change', function(event) {
    var file = event.target.files[0];
    if (file) {
        var formData = new FormData();
        formData.append('files', file);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/index.php', true);
        xhr.onload = function() {
        if (xhr.status === 200) {
            // Redirect to report.php
            window.location.href = '/report.php';
        } else {
            // Handle error
            console.log('Error:', xhr.status);
        }
        };
        xhr.send(formData);
    }
    });
    
    document.body.appendChild(input);
    input.click();
});

function showPopup() {
    alert("Ảnh sẽ được xóa ngay sau khi phân tích để đảm bảo lưu trữ của hệ thống!");
}

  