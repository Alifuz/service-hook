This package provides a nice way of sending hooks to service-hook in your Laravel projects.

Follow these docs to install this package and start using hooks in your laravel projects.


# Installation

You may now install Hooks into your project using the Composer package manager:

```bash
composer require aliftech/service-hook
```

After installing hook package, publish its assets using the `vendor:publish` Artisan command:

```text
php artisan vendor:publish --provider=Alifshop\Hooks\ServiceHookProvider
```

# Configuration

After publishing hook's assets, its primary configuration file will be located at `config/hook.php`. 

for the specified keys, you must enter the data of the hook service, you can get them by asking the responsible person for the hook service


## Concept of hooking data

Hooks are needed in order to store the history of entity changes, for example, 

when an entity changes its status, or when an entity is created, and so on. 

As a microservice, we have separated this service and are linking through the http


## Using Hook package on your controller or on your service or anywhere u want to use



```bash
use Alifshop\Hooks\HookData;
use Alifshop\Hooks\Http\ServiceHook;

...
...
...

public function foo() {
    (new ServiceHook(new HookData(
            service: 'merchants',
            hookable_type: $model->getTable(),
            hookable_id: $model->id,
            created_from_str: 'PRM',
            created_by_id: 6,
            body: 'Создано условие',
            keyword: 'id: ' . $condition->id . ' ' . $condition->title,
            action: 'create',
            class: 'info',
            action_at: null,
            created_by_str: 'Oybek',
        )))->store();
}
      
```

The other specific documentation will be coming soon
