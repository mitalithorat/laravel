<?php

namespace App\Http\Controllers;

use App\Interfaces\StudentRepositoryInterface;

use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\StudentPostRequest;


class StudentController extends Controller
{
    protected $studentRepository;
    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }
    public function index()
    {
        $students = $this->studentRepository->all();


        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentPostRequest $request): RedirectResponse
    {

        $id = $request->validated();

         $this->studentRepository->store($id);

          return redirect()->route('students.index')->with('status', 'user created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::find($id);

        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
            $student = $this->studentRepository->find($id);

            return view('students.edit', ['student' => $student]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $this->studentRepository->update($id, $request->all());

        return redirect()->route('students.index')
            ->with('success', ' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->studentRepository->delete($id);



        return redirect()->route('students.index')
            ->with('success', ' deleted successfully');
    }
}
