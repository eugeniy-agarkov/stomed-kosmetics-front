<?php
namespace App\Http\Handlers\Form;

use App\Http\Handlers\BaseHandler;
use App\Http\Requests\Form\AppointmentRequest;
use App\Models\Form;

class StoreAppointmentHandler extends BaseHandler
{

    /**
     * @param AppointmentRequest $request
     * @param Form|null $form
     * @return Form|null
     */
    public function process(AppointmentRequest $request)
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
