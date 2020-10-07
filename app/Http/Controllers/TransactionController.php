<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Requests\TransactionRequest;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::all();
        return view('transactions.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transactions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransactionRequest $request)
    {
            $imgName = null;
            if($request->hasFile('proof')) {
                $img = $request->file('proof');
                $ext = $img->getClientOriginalExtension();
                $imgName = time() . str_replace(' ','',$request['sender_name']) . '.' . $ext;
                $imgPath = $img->storeAs('public/transactions', $imgName);
            }

            $transaction = Transaction::create([
                'sender_name' => $request['sender_name'],
                'sender_account' => $request['sender_account'],
                'send_date' => $request['send_date'],
                'receiver_account' => $request['receiver_account'],
                'wallet' => $request['wallet'],
                'status' => $request['status'],
                'verified_by' => $request['verified_by'],
                'verified_date' => $request['verified_date'],
                'proof' => $imgName,
                'amount' => $request['amount'],
                'note' => $request['note'],
            ]);



        return redirect()->route('transactions.index')
            ->with('success', 'Data transaksi berhasil ditambahkan');
    }

    // try {
    // } catch (\Exception $exception) {
    //     $errcode = $exception->getMessage();
    //     return redirect()->back()->with('fail', 'Gagal: Terjadi kesalahan!' . $errcode);
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        return view('transactions.show', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        return view('transactions.edit', compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(TransactionRequest $request, Transaction $transaction)
    {
        dd($request);
        $imgName = null;
        if($request->hasFile('proof')) {
            $img = $request->file('proof');
            $ext = $img->getClientOriginalExtension();
            $imgName = time() . str_replace(' ','',$request['sender_name']) . '.' . $ext;
            $imgPath = $img->storeAs('public/transactions', $imgName);
        }
        $transaction->sender_name = $request['sender_name'];
        $transaction->sender_account = $request['sender_account'];
        $transaction->send_date = $request['send_date'];
        $transaction->receiver_account = $request['receiver_account'];
        $transaction->wallet = $request['wallet'];
        $transaction->status = $request['status'];
        $transaction->verified_by = $request['verified_by'];
        $transaction->verified_date = $request['verified_date'];
        $transaction->proof = $imgName;
        $transaction->amount = $request['amount'];
        $transaction->note = $request['note'];
        $transaction->save();

        return redirect()->route('transaction.index')
            ->with('success', 'Data transaksi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('transactions.index')
            ->with('success', 'Data transaksi berhasil dihapus');
    }
}
