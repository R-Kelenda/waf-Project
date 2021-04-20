<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetrainerRequest;
use App\Http\Requests\UpdatetrainerRequest;
use App\Repositories\trainerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class trainerController extends AppBaseController
{
    /** @var  trainerRepository */
    private $trainerRepository;

    public function __construct(trainerRepository $trainerRepo)
    {
        $this->trainerRepository = $trainerRepo;
    }

    /**
     * Display a listing of the trainer.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $trainers = $this->trainerRepository->all();

        return view('trainers.index')
            ->with('trainers', $trainers);
    }

    /**
     * Show the form for creating a new trainer.
     *
     * @return Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created trainer in storage.
     *
     * @param CreatetrainerRequest $request
     *
     * @return Response
     */
    public function store(CreatetrainerRequest $request)
    {
        $input = $request->all();

        $trainer = $this->trainerRepository->create($input);

        Flash::success('Trainer saved successfully.');

        return redirect(route('trainers.index'));
    }

    /**
     * Display the specified trainer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trainer = $this->trainerRepository->find($id);

        if (empty($trainer)) {
            Flash::error('Trainer not found');

            return redirect(route('trainers.index'));
        }

        return view('trainers.show')->with('trainer', $trainer);
    }

    /**
     * Show the form for editing the specified trainer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trainer = $this->trainerRepository->find($id);

        if (empty($trainer)) {
            Flash::error('Trainer not found');

            return redirect(route('trainers.index'));
        }

        return view('trainers.edit')->with('trainer', $trainer);
    }

    /**
     * Update the specified trainer in storage.
     *
     * @param int $id
     * @param UpdatetrainerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetrainerRequest $request)
    {
        $trainer = $this->trainerRepository->find($id);

        if (empty($trainer)) {
            Flash::error('Trainer not found');

            return redirect(route('trainers.index'));
        }

        $trainer = $this->trainerRepository->update($request->all(), $id);

        Flash::success('Trainer updated successfully.');

        return redirect(route('trainers.index'));
    }

    /**
     * Remove the specified trainer from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trainer = $this->trainerRepository->find($id);

        if (empty($trainer)) {
            Flash::error('Trainer not found');

            return redirect(route('trainers.index'));
        }

        $this->trainerRepository->delete($id);

        Flash::success('Trainer deleted successfully.');

        return redirect(route('trainers.index'));
    }
}
