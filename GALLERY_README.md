# Gallery Instructions

## Image Gallery
Place your images in the `myimages` folder. Supported formats:
- JPG/JPEG
- PNG
- GIF
- WEBP

Images will automatically appear in the gallery section on the homepage.

## Video Gallery
Place your videos in the `myvideos` folder. Supported formats:
- MP4
- WEBM
- MOV
- AVI
- MKV

Videos will automatically appear in the video gallery section below the images.

## How It Works
The galleries are dynamically loaded using a PHP backend:
- `get-media.php` scans the folders and returns the file list as JSON
- JavaScript automatically creates gallery items for each media file
- Simply add or remove files from the folders - the galleries will update automatically when you refresh the page

## Tips
- Use descriptive filenames (without timestamps) for better labels in the gallery
- Keep file sizes reasonable for web performance
- Test videos in different browsers for compatibility
