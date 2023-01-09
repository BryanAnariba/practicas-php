const onDisplayImage = ( file ) => {
    // console.log('File Loaded: ', { file });
    let type = file.type.split( '/' ).pop();
    //console.log( 'Type: ', file.type.split( '/' ).pop() );

    let imgPreview = document.querySelector( '.js-preview-image' );
    let typesImages = [ 'png', 'jpg', 'jpeg', 'gif' ];

    if ( typesImages.some( typeFound => typeFound === type ) ) { // si encuentra la extension en el array cargala
        imgPreview.src = URL.createObjectURL(file);
        document.querySelector( '.alert-preview-image' ).innerHTML = '';
    } else { // si no tira alerta
        document.querySelector( '.alert-preview-image' ).innerHTML = '';
        imgPreview.src = `../../assets/images/user.jpg`;
        document.querySelector( '.alert-preview-image' ).innerHTML += `
            <div class="alert alert-danger" role="alert">
                Field Not Supported, The files supporteds are: ${ typesImages }
            </div>
        `;
    }
}