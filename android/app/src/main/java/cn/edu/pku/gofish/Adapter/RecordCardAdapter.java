package cn.edu.pku.gofish.Adapter;


import android.content.Context;
import android.support.v7.widget.RecyclerView;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.GridView;
import android.widget.ImageView;
import android.widget.TextView;

import java.util.List;

import cn.edu.pku.gofish.Model.Record;
import cn.edu.pku.gofish.R;


public class RecordCardAdapter extends RecyclerView.Adapter {
    private List<Record> RecordList;
    private Context context;
    public RecordCardAdapter(List<Record> _RecordList,Context context) {
        RecordList = _RecordList;
        this.context = context;
    }

    @Override
    public RecyclerView.ViewHolder onCreateViewHolder(ViewGroup viewGroup, int i) {
        Log.d("ViewHolder", "onCreateViewHolder, i: " + i);
        View v = LayoutInflater.from(viewGroup.getContext()).inflate(R.layout.view_item, viewGroup, false);
        return new ViewHolder(v);
    }

    @Override
    public void onBindViewHolder(RecyclerView.ViewHolder viewHolder, int i) {
        Log.d("ViewHolder", "onBindViewHolder, i: " + i + ", viewHolder: " + viewHolder);
        ViewHolder holder = (ViewHolder) viewHolder;
        holder.position = i;
        Record record = RecordList.get(i);

        holder.information.setText(record.TextLine());
        holder.gridView.setAdapter(new ImageAdapter(context,i%4));
    }

    @Override
    public int getItemCount() {
        return RecordList.size();
    }

    public static class ViewHolder extends RecyclerView.ViewHolder
    {

        public TextView information;
        public int position;
        public GridView gridView;
        public ViewHolder(View view)
        {
            super(view);
            information = (TextView) view.findViewById(R.id.textView);
            gridView=(GridView) view.findViewById(R.id.gridview);
        }

    }

    private class ImageAdapter extends BaseAdapter {
        private Context mContext;
        private int num;
        public ImageAdapter(Context context,int num) {
            this.mContext=context;
            this.num = num;
        }

        @Override
        public int getCount() {
            return num;
        }

        @Override
        public Object getItem(int position) {
            return mThumbIds[position];
        }

        @Override
        public long getItemId(int position) {
            // TODO Auto-generated method stub
            return 0;
        }

        @Override
        public View getView(int position, View convertView, ViewGroup parent) {
            //定义一个ImageView,显示在GridView里
            ImageView imageView;
            if(convertView==null){
                imageView=new ImageView(mContext);
                imageView.setLayoutParams(new GridView.LayoutParams(150, 150));

                imageView.setScaleType(ImageView.ScaleType.CENTER_CROP);
                imageView.setPadding(8, 8, 8, 8);
            }else{
                imageView = (ImageView) convertView;
            }
            imageView.setImageResource(mThumbIds[position]);
            return imageView;
        }



    }

    private Integer[] mThumbIds = {
            R.drawable.icon_photo, R.drawable.icon_photo,
            R.drawable.icon_photo

    };

}