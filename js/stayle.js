





const EL_browse  = document.getElementById('browse');
const EL_preview = document.getElementById('preview');

const readImage  = file => {
    if ( !(/^image\/(png|jpe?g|gif)$/).test(file.type) )
        return EL_preview.insertAdjacentHTML('beforeend', `Unsupported format ${file.type}: ${file.name}<br>`);

    const img = new Image();
    img.addEventListener('load', () => {
        EL_preview.appendChild(img);
        EL_preview.insertAdjacentHTML('beforeend', `<div>${file.name} ${img.width}×${img.height} ${file.type} ${Math.round(file.size/1024)}KB<div>`);
        window.URL.revokeObjectURL(img.src); // Free some memory
    });
    img.src = window.URL.createObjectURL(file);
}

EL_browse.addEventListener('change', ev => {
    EL_preview.innerHTML = ''; // Remove old images and data
    const files = ev.target.files;
    if (!files || !files[0]) return alert('File upload not supported');
    [...files].forEach( readImage );
});



