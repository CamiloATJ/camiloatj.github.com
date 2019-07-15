<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemascotasRequest;
use App\Http\Requests\UpdatemascotasRequest;
use App\Repositories\mascotasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class mascotasController extends AppBaseController
{
    /** @var  mascotasRepository */
    private $mascotasRepository;

    public function __construct(mascotasRepository $mascotasRepo)
    {
        $this->mascotasRepository = $mascotasRepo;
    }

    /**
     * Display a listing of the mascotas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mascotas = $this->mascotasRepository->all();

        return view('mascotas.index')
            ->with('mascotas', $mascotas);
    }

    /**
     * Show the form for creating a new mascotas.
     *
     * @return Response
     */
    public function create()
    {
        return view('mascotas.create');
    }

    /**
     * Store a newly created mascotas in storage.
     *
     * @param CreatemascotasRequest $request
     *
     * @return Response
     */
    public function store(CreatemascotasRequest $request)
    {
        $input = $request->all();

        $mascotas = $this->mascotasRepository->create($input);

        Flash::success('Mascotas saved successfully.');

        return redirect(route('mascotas.index'));
    }

    /**
     * Display the specified mascotas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mascotas = $this->mascotasRepository->find($id);

        if (empty($mascotas)) {
            Flash::error('Mascotas not found');

            return redirect(route('mascotas.index'));
        }

        return view('mascotas.show')->with('mascotas', $mascotas);
    }

    /**
     * Show the form for editing the specified mascotas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mascotas = $this->mascotasRepository->find($id);

        if (empty($mascotas)) {
            Flash::error('Mascotas not found');

            return redirect(route('mascotas.index'));
        }

        return view('mascotas.edit')->with('mascotas', $mascotas);
    }

    /**
     * Update the specified mascotas in storage.
     *
     * @param int $id
     * @param UpdatemascotasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemascotasRequest $request)
    {
        $mascotas = $this->mascotasRepository->find($id);

        if (empty($mascotas)) {
            Flash::error('Mascotas not found');

            return redirect(route('mascotas.index'));
        }

        $mascotas = $this->mascotasRepository->update($request->all(), $id);

        Flash::success('Mascotas updated successfully.');

        return redirect(route('mascotas.index'));
    }

    /**
     * Remove the specified mascotas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mascotas = $this->mascotasRepository->find($id);

        if (empty($mascotas)) {
            Flash::error('Mascotas not found');

            return redirect(route('mascotas.index'));
        }

        $this->mascotasRepository->delete($id);

        Flash::success('Mascotas deleted successfully.');

        return redirect(route('mascotas.index'));
    }
}
