<?php

namespace Structural\Composite;

use Structural\Composite\FormElements\Input;
use Structural\Composite\FormElements\FormElement;
use Structural\Composite\FormElements\FieldComposites\Form;
use Structural\Composite\FormElements\FieldComposites\Fieldset;

class CreateProductForm
{
    /**
     * The client code gets a convenient interface for building complex tree
     * structures.
     */
    public function getProductForm(): FormElement
    {
        $form = new Form('product', "Add product", "/product/add");
        $form->add(new Input('name', "Name", 'text'));
        $form->add(new Input('description', "Description", 'text'));

        $picture = new Fieldset('photo', "Product photo");
        $picture->add(new Input('caption', "Caption", 'text'));
        $picture->add(new Input('image', "Image", 'file'));
        $form->add($picture);

        return $form;
    }

    /**
     * The form structure can be filled with data from various sources. The Client
     * doesn't have to traverse through all form fields to assign data to various
     * fields since the form itself can handle that.
     */
    public function loadProductData(FormElement $form, array $data)
    {
        $form->setData($data);
    }

    /**
     * The client code can work with form elements using the abstract interface.
     * This way, it doesn't matter whether the client works with a simple component
     * or a complex composite tree.
     */
    public function renderProduct(FormElement $form)
    {
        echo $form->render();
    }
}
