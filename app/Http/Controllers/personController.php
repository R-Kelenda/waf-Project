<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepersonRequest;
use App\Http\Requests\UpdatepersonRequest;
use App\Repositories\personRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Auth;

class personController extends AppBaseController
{
    /** @var  personRepository */
    private $personRepository;

    public function __construct(personRepository $personRepo)
    {
        $this->personRepository = $personRepo;
    }

    /**
     * Display a listing of the person.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $people = $this->personRepository->all();

        return view('people.index')
            ->with('people', $people);
    }
	public function getLoggedInPersonDetails()
    {

        if (!Auth::guest()){
            $user = Auth::user();
            echo "Userid is " . $user->id;    
            echo "person id is " . $user->person->id;
            echo "The person's name is " . $user->person->firstname . " ";
            echo $user->person->surname;
            echo "The person is a " . $user->person->membertype;
        }
        else {
            echo "not logged in ";
        }
    }

    /**
     * Show the form for creating a new person.
     *
     * @return Response
     */
    public function create()
    {
        return view('people.create');
    }

    /**
     * Store a newly created person in storage.
     *
     * @param CreatepersonRequest $request
     *
     * @return Response
     */
    public function store(CreatepersonRequest $request)
    {
        $input = $request->all();

        $person = $this->personRepository->create($input);

        Flash::success('Person saved successfully.');

        return redirect(route('people.index'));
    }

    /**
     * Display the specified person.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $person = $this->personRepository->find($id);

        if (empty($person)) {
            Flash::error('Person not found');

            return redirect(route('people.index'));
        }

        return view('people.show')->with('person', $person);
    }

    /**
     * Show the form for editing the specified person.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $person = $this->personRepository->find($id);

        if (empty($person)) {
            Flash::error('Person not found');

            return redirect(route('people.index'));
        }

        return view('people.edit')->with('person', $person);
    }

    /**
     * Update the specified person in storage.
     *
     * @param int $id
     * @param UpdatepersonRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepersonRequest $request)
    {
        $person = $this->personRepository->find($id);

        if (empty($person)) {
            Flash::error('Person not found');

            return redirect(route('people.index'));
        }

        $person = $this->personRepository->update($request->all(), $id);

        Flash::success('Person updated successfully.');

        return redirect(route('people.index'));
    }

    /**
     * Remove the specified person from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $person = $this->personRepository->find($id);

        if (empty($person)) {
            Flash::error('Person not found');

            return redirect(route('people.index'));
        }

        $this->personRepository->delete($id);

        Flash::success('Person deleted successfully.');

        return redirect(route('people.index'));
    }
}
