wp.domReady( () => {
    // Unregister any block styles we don't want user to be able to select
    wp.blocks.unregisterBlockStyle( 'core/button', [ 'default', 'outline', 'squared', 'fill' ] );
    wp.blocks.unregisterBlockStyle( 'core/image', [ 'default', 'rounded'] );
    wp.blocks.unregisterBlockStyle( 'core/separator', [ 'default', 'wide', 'dots'] );
    
} );