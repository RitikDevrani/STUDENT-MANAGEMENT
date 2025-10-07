<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'enrollments';
    protected $primaryKey = 'id';
    protected $fillable = ['enroll_no', 'batch_id', 'student_id', 'join_date', 'fee'];

    public function student()
    {
        return $this->BelongsTo(Student::class);
    }

    public function batch()
    {
        return $this->BelongsTo(Batch::class);
    }

}
