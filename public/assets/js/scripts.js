function preview_image(event)
{
    let reader = new FileReader();
    reader.onload = function()
    {
        let output = document.getElementById('output-image');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
