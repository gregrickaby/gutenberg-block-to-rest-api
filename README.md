# Gutenberg Blocks to REST-API

Register Gutenberg blocks to the WordPress REST-API as structured data.

## Example

**Before:** `GET /wp/v2/posts/1`

Many Gutenberg blocks create a massive string of content:

```json
 "title": {
  "rendered": "Hello world!"
 },
 "content": {
  "rendered": "\n<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!<\/p>\n\n\n\n<p>Lorem ipsum dolor sit amet netus urna adipiscing incididunt venenatis dictumst. Vel habitasse euismod fringilla dictum quisque senectus mi viverra faucibus eros diam lectus fusce nisi. Neque vitae do rhoncus auctor libero nisl sagittis euismod iaculis dictumst mollis aliqua blandit labore. Pretium pellentesque molestie scelerisque tincidunt sagittis semper mollis. Donec pellentesque at arcu tincidunt aliquet semper eget orci cursus nunc curabitur.<\/p>\n\n\n\n<p>Ac aenean tortor curabitur cras tempor scelerisque mi quam nisi arcu duis tempor arcu erat. Elit venenatis aenean a sollicitudin leo risus nibh congue praesent nullam. Malesuada dictum pretium do euismod fames in malesuada. Sodales vel purus viverra cursus proin fusce malesuada vulputate. Enim lobortis elit diam maecenas adipiscing sagittis imperdiet nisl enim urna.<\/p>\n",
 },
```

**After:** `GET /wp/v2/posts/1?blocks=true`

Gutenberg blocks now have their own field in the REST-API, and each block is structured as an array of objects.

Note the `blocks=true` URL parameter, this is required to return the Gutenberg block data.

```json
 "title": {
  "rendered": "Hello world!"
 },
 "gutenberg_blocks": [
  {
   "blockName": "core\/paragraph",
   "attrs": [],
   "innerBlocks": [],
   "innerHTML": "\n<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!<\/p>\n",
   "innerContent": [
    "\n<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!<\/p>\n"
   ]
  },
  {
   "blockName": "core\/paragraph",
   "attrs": [],
   "innerBlocks": [],
   "innerHTML": "\n<p>Lorem ipsum dolor sit amet netus urna adipiscing incididunt venenatis dictumst. Vel habitasse euismod fringilla dictum quisque senectus mi viverra faucibus eros diam lectus fusce nisi. Neque vitae do rhoncus auctor libero nisl sagittis euismod iaculis dictumst mollis aliqua blandit labore. Pretium pellentesque molestie scelerisque tincidunt sagittis semper mollis. Donec pellentesque at arcu tincidunt aliquet semper eget orci cursus nunc curabitur.<\/p>\n",
   "innerContent": [
    "\n<p>Lorem ipsum dolor sit amet netus urna adipiscing incididunt venenatis dictumst. Vel habitasse euismod fringilla dictum quisque senectus mi viverra faucibus eros diam lectus fusce nisi. Neque vitae do rhoncus auctor libero nisl sagittis euismod iaculis dictumst mollis aliqua blandit labore. Pretium pellentesque molestie scelerisque tincidunt sagittis semper mollis. Donec pellentesque at arcu tincidunt aliquet semper eget orci cursus nunc curabitur.<\/p>\n"
   ]
  },
  {
   "blockName": "core\/paragraph",
   "attrs": [],
   "innerBlocks": [],
   "innerHTML": "\n<p>Ac aenean tortor curabitur cras tempor scelerisque mi quam nisi arcu duis tempor arcu erat. Elit venenatis aenean a sollicitudin leo risus nibh congue praesent nullam. Malesuada dictum pretium do euismod fames in malesuada. Sodales vel purus viverra cursus proin fusce malesuada vulputate. Enim lobortis elit diam maecenas adipiscing sagittis imperdiet nisl enim urna.<\/p>\n",
   "innerContent": [
    "\n<p>Ac aenean tortor curabitur cras tempor scelerisque mi quam nisi arcu duis tempor arcu erat. Elit venenatis aenean a sollicitudin leo risus nibh congue praesent nullam. Malesuada dictum pretium do euismod fames in malesuada. Sodales vel purus viverra cursus proin fusce malesuada vulputate. Enim lobortis elit diam maecenas adipiscing sagittis imperdiet nisl enim urna.<\/p>\n"
   ]
  }
 ],
```
