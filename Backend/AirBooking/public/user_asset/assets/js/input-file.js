function onChangeInput(e, imagePreview, imageData, fileTypes, maxSize, imgDefault) {
    $(imagePreview).attr('src', imgDefault)

    // Get the current file upload
    var file = e.target.files[0];

    if (fileTypes.indexOf(file.type) == -1) {
        swal('Thông báo', 'File không hợp lệ (chỉ file hình jpg và png được chấp nhận)!', 'warning');
        return;
    }

    if (file.size > maxSize) {
        swal('Thông báo', 'Dung lượng file vượt quá giới hạn (tối đa 1MB được chấp nhận)!', 'warning');
        return;
    }

    var reader = new FileReader();
    reader.onload = function (e) {
        imageData = e.target.result;

        // Validate file content
        $(imagePreview).onerror = function () {
            imageData = "";
            $(imagePreview).setAttribute('src', imgDefault);
        };
        $(imagePreview).attr('src', imageData);
    };
    reader.readAsDataURL(file);
}