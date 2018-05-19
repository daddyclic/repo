<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MarquePorteurRequest;
use App\Repositories\MarquePorteurRepository;

class MarquePorteurController extends Controller 
{
    private $marqueporteurRepo;

    public function __construct(MarquePorteurRepository $marqueporteurRepo)
    {
        $this->MarquePorteurRepository = $marqueporteurRepo;
    }
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
       //$this->MarquePorteurRepository->pushCriteria(new RequestCriteria($request));
        $marquePorteurs = $this->MarquePorteurRepository->all();

        return view('marquePorteur.index')
            ->with('marquePorteurs', $marquePorteurs);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('marquePorteur.create');    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(MarquePorteurRequest $request)
  {
        $input = $request->all();

        $moteur = $this->MarquePorteurRepository->create($input);

        //Flash::success('Moteur saved successfully.');

        return redirect(route('marqueporteur.index'));	
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>
