Sylex
=====

Sylex is a tiny layer on top of [Silex](http://silex.sensiolabs.org/) framework.

There is a controller base class with some handy shortcut methods.
It will also inject the container into your controllers.

## Example

```php
class ArticleController extends Sylex\Controller
{
    public function listAction()
    {
        return $this->render(
            'article/list.html.twig',
            array('articles' => $this->get('manager.article')->findAll())
        );
    }

    public function createAction(Request $request)
    {
        $form = $this->get('form.article');

        if ('POST' == $request->getMethod()) {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $this->get('manager.article')->persistArticle($form->getData());

                return $this->redirect($this->generateUrl('article_list'));
            }
        }

        return $this->render(
            'article/create.html.twig',
            array('form' => $form->createView())
        );
    }
}
```

## Installation

The recommended way to Sylex is through
[composer](http://getcomposer.org).

```json
{
    "require": {
        "umpirsky/sylex": "*"
    }
}
```

## Setup

There are two ways to start using Sylex. You can extend your application class
from `Sylex\Application` or register the service provider: `$this->register(new Sylex\ServiceProvider());`.

## Tests

To run the test suite, you need [PHPUnit](https://github.com/sebastianbergmann/phpunit).

    $ phpunit

## License

Sylex is licensed under the MIT license.
