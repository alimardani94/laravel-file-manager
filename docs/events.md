# Events

### BeforeInitialization

> Alimardani94\LaravelFileManager\Events\BeforeInitialization

Example:

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\BeforeInitialization',
    function ($event) {
        
    }
);
```

### DiskSelected

> Alimardani94\LaravelFileManager\Events\DiskSelected

Example:

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\DiskSelected',
    function ($event) {
        \Log::info('DiskSelected:', [$event->disk()]);
    }
);
```

### FilesUploading

> Alimardani94\LaravelFileManager\Events\FilesUploading

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\FilesUploading',
    function ($event) {
        \Log::info('FilesUploading:', [
            $event->disk(),
            $event->path(),
            $event->files(),
            $event->overwrite(),
        ]);
    }
);
```

### FilesUploaded

> Alimardani94\LaravelFileManager\Events\FilesUploaded

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\FilesUploaded',
    function ($event) {
        \Log::info('FilesUploaded:', [
            $event->disk(),
            $event->path(),
            $event->files(),
            $event->overwrite(),
        ]);
    }
);
```

### Deleting

> Alimardani94\LaravelFileManager\Events\Deleting

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\Deleting',
    function ($event) {
        \Log::info('Deleting:', [
            $event->disk(),
            $event->items(),
        ]);
    }
);
```

### Deleted

> Alimardani94\LaravelFileManager\Events\Deleted

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\Deleted',
    function ($event) {
        \Log::info('Deleted:', [
            $event->disk(),
            $event->items(),
        ]);
    }
);
```

### Paste

> Alimardani94\LaravelFileManager\Events\Paste

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\Paste',
    function ($event) {
        \Log::info('Paste:', [
            $event->disk(),
            $event->path(),
            $event->clipboard(),
        ]);
    }
);
```

### Rename

> Alimardani94\LaravelFileManager\Events\Rename

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\Rename',
    function ($event) {
        \Log::info('Rename:', [
            $event->disk(),
            $event->newName(),
            $event->oldName(),
            $event->type(), // 'file' or 'dir'
        ]);
    }
);
```

### Download

> Alimardani94\LaravelFileManager\Events\Download

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\Download',
    function ($event) {
        \Log::info('Download:', [
            $event->disk(),
            $event->path(),
        ]);
    }
);
```

*When using a text editor, the file you are editing is also downloaded! And this event is triggered!*

### DirectoryCreating

> Alimardani94\LaravelFileManager\Events\DirectoryCreating

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\DirectoryCreating',
    function ($event) {
        \Log::info('DirectoryCreating:', [
            $event->disk(),
            $event->path(),
            $event->name(),
        ]);
    }
);
```

### DirectoryCreated

> Alimardani94\LaravelFileManager\Events\DirectoryCreated

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\DirectoryCreated',
    function ($event) {
        \Log::info('DirectoryCreated:', [
            $event->disk(),
            $event->path(),
            $event->name(),
        ]);
    }
);
```

### FileCreating

> Alimardani94\LaravelFileManager\Events\FileCreating

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\FileCreating',
    function ($event) {
        \Log::info('FileCreating:', [
            $event->disk(),
            $event->path(),
            $event->name(),
        ]);
    }
);
```

### FileCreated

> Alimardani94\LaravelFileManager\Events\FileCreated

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\FileCreated',
    function ($event) {
        \Log::info('FileCreated:', [
            $event->disk(),
            $event->path(),
            $event->name(),
        ]);
    }
);
```

### FileUpdate

> Alimardani94\LaravelFileManager\Events\FileUpdate

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\FileUpdate',
    function ($event) {
        \Log::info('FileUpdate:', [
            $event->disk(),
            $event->path(),
        ]);
    }
);
```

### Zip

> Alimardani94\LaravelFileManager\Events\Zip

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\Zip',
    function ($event) {
        \Log::info('Zip:', [
            $event->disk(),
            $event->path(),
            $event->name(),
            $event->elements(),
        ]);
    }
);
```

### ZipCreated

> Alimardani94\LaravelFileManager\Events\ZipCreated

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\ZipCreated',
    function ($event) {
        \Log::info('ZipCreated:', [
            $event->disk(),
            $event->path(),
            $event->name(),
            $event->elements(),
        ]);
    }
);
```

### ZipFailed

> Alimardani94\LaravelFileManager\Events\ZipCreated

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\ZipFailed',
    function ($event) {
        \Log::info('ZipFailed:', [
            $event->disk(),
            $event->path(),
            $event->name(),
            $event->elements(),
        ]);
    }
);
```

### Unzip

> Alimardani94\LaravelFileManager\Events\Unzip

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\Unzip',
    function ($event) {
        \Log::info('Unzip:', [
            $event->disk(),
            $event->path(),
            $event->folder(),
        ]);
    }
);
```

### UnzipCreated

> Alimardani94\LaravelFileManager\Events\UnzipCreated

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\UnzipCreated',
    function ($event) {
        \Log::info('UnzipCreated:', [
            $event->disk(),
            $event->path(),
            $event->folder(),
        ]);
    }
);
```

### UnzipFailed

> Alimardani94\LaravelFileManager\Events\UnzipFailed

```php
\Event::listen('Alimardani94\LaravelFileManager\Events\UnzipFailed',
    function ($event) {
        \Log::info('UnzipFailed:', [
            $event->disk(),
            $event->path(),
            $event->folder(),
        ]);
    }
);
```
