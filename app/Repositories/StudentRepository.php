<?php

namespace App\Repositories;

use App\Interfaces\StudentRepositoryInterface;
use App\Models\Student;

class StudentRepository implements StudentRepositoryInterface
{
    public function all()
    {
        return Student::all();
    }

    public function store(array $data)
    {

        $data['hobbies'] = implode(',', $data['hobbies']);
        $student = Student::create($data);
         return Student::create($data);

    }

    public function find($id)
    {
        return Student::where('id', $id)->first();
    }

    public function update($id, array $data)
    {
        $data['hobbies'] = implode(',', $data['hobbies']);
        $student = $this->find($id);
        $student->update($data);
        return $student;
    }




    public function delete($id)
    {
        $student = $this->find($id);
       return $student->delete();

    }
}
