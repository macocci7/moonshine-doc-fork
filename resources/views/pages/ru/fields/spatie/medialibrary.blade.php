<x-page title="Spatie\MediaLibrary">

    <x-p>
        Поле предназначено для работы с пакетом
        <x-link link="https://github.com/spatie/laravel-medialibrary" target="_blank">Laravel-medialibrary</x-link>
        от
        <x-link link="https://spatie.be/open-source" target="_blank">Spatie</x-link>
    </x-p>

    <x-p>
        Прежде чем использовать поле Spatie\MediaLibrary, необходимо убедиться что:
    </x-p>

    <x-ul :items="[
'Пакет spatie/laravel-medialibrary установлен и настроен',
'Поле, передаваемое в Spatie\MediaLibrary, добавлено как название коллекции через ->addMediaCollection(\'Поле\')'
]"></x-ul>

    <x-p>
        В модели:
    </x-p>
    <x-code language="php">
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ModelClass extends Model implements HasMedia
    //...
    use InteractsWithMedia;

    //...
    public function registerMediaCollections(): void
    {
        $this ->addMediaCollection('cover');
    }
    //...
    </x-code>

    <x-p>
        В MoonShine-ресурсе:
    </x-p>
    <x-code language="php">
        use Leeto\MoonShine\Fields\Spatie\MediaLibrary;
        //...
        MediaLibrary::make('Обложка', 'cover'),
        //...
    </x-code>

    <x-p>
        По умолчанию, поле работает в режиме одного изображения
    </x-p>
    <x-code language="php">
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ModelClass extends Model implements HasMedia
//...
use InteractsWithMedia;
//...
public function registerMediaCollections(): void
{
    $this ->addMediaCollection('cover')->singleFile();
}
//...
    </x-code>
    <x-p>
        Если вы хотите использовать поле для загрузки нескольких изображений, добавьте к объявлению поля метод ->multiple()
    </x-p>
    <x-code language="php">
//...
MediaLibrary::make('Галерея', 'gallery')->multiple(),
//...
    </x-code>


</x-page>