<?php
namespace App\Http\Handlers\Form;

use App\Http\Handlers\BaseHandler;
use App\Http\Requests\Form\CallbackRequest;
use App\Models\Form;

class StoreCallbackHandler extends BaseHandler
{

    /**
     * @param CallbackRequest $request
     * @param Form|null $form
     * @return Form|null
     */
    public function process(CallbackRequest $request)
    {
        try {

            $form = new Form();

            $form->fill($request->all());

            if (!$form->save())
            {
                throw new \LogicException('Failed to store news record');
            }

            return $form;

        } catch (\Throwable $e) {

            $this->setErrors($e->getMessage());
            return null;

        }
    }

}
